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

@Controller
@RequiredArgsConstructor
public class AuthController {

    private final UserService userService;

    @GetMapping("/register")
    public String registerForm(final Model model) {
        model.addAttribute("user", new User());
        return "register";
    }

    @PostMapping("/register")
    public String register(@Valid @ModelAttribute("user") User user, BindingResult bindingResult) throws NonUniqueLoginException
    {
        if (bindingResult.hasErrors())
        {
            return "register";
        }
        else {
            userService.registerUser(user);
            return "redirect:/register";
        }
    }
}
