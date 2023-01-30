package com.example.shop_app.controller;

import com.example.shop_app.exception.NonUniqueCodeException;
import com.example.shop_app.info.ProductInfo;
import com.example.shop_app.service.ProductService;
import com.example.shop_app.service.ProductcategoryService;
import jakarta.validation.Valid;
import lombok.RequiredArgsConstructor;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.validation.BindingResult;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.ModelAttribute;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestParam;

import java.nio.file.attribute.UserPrincipalNotFoundException;

@Controller
@RequiredArgsConstructor
public class ProductController {

    private final ProductService productService;
    private final ProductcategoryService productcategoryService;

    @GetMapping("/products")
    public String showProductsList(final Model model, @RequestParam(required = false) String success) {
        model.addAttribute("products", productService.getAllProducts());
        model.addAttribute("success", success);
        return "products_list";
    }

    @GetMapping("/add_product")
    public String getProductForm(final Model model, @RequestParam(required = false) String error) {
        model.addAttribute("product", new ProductInfo());
        model.addAttribute("productcategories", productcategoryService.getAllProductCategories());
        model.addAttribute("error", error);
        return "add_product";
    }

    @PostMapping("/add_product")
    public String addProduct(@Valid @ModelAttribute("product") ProductInfo productInfo, BindingResult bindingResult) throws UserPrincipalNotFoundException
    {
        if (bindingResult.hasErrors())
        {
            return "add_product";
        }
        else
        {
            try
            {
                productService.saveProduct(productInfo);
            }
            catch(NonUniqueCodeException e)
            {
                return "redirect:/add_product?error=true";
            }

            return "redirect:/products?success=true";
        }
    }

}
