package com.example.shop_app.controller;

import com.example.shop_app.exception.NonUniqueLoginException;
import jakarta.validation.Valid;
import org.springframework.ui.Model;
import org.springframework.validation.BindingResult;
import org.springframework.web.bind.annotation.ModelAttribute;
import com.example.shop_app.entity.User;
import com.example.shop_app.service.UserService;
import lombok.RequiredArgsConstructor;
import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestParam;

@Controller
@RequiredArgsConstructor
public class AuthController {

    private final UserService userService;

    @GetMapping("/login")
    public String viewLoginPage(final Model model, @RequestParam(required = false) String success) {
        model.addAttribute("success", success);
        return "login";
    }
    @GetMapping("/register")
    public String registerForm(final Model model, @RequestParam(required = false) String error) {
        model.addAttribute("user", new User());
        model.addAttribute("error", error);
        return "register";
    }

    @PostMapping("/register")
    public String register(@Valid @ModelAttribute("user") User user, BindingResult bindingResult)
    {
        if (bindingResult.hasErrors())
        {
            return "register";
        }
        else
        {
            try
            {
                userService.registerUser(user);
            }
            catch(NonUniqueLoginException e)
            {
                return "redirect:/register?error=true";
            }
            return "redirect:/login?success=true";
        }
    }
}
