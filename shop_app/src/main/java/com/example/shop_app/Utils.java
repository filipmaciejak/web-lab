package com.example.shop_app;

import com.example.shop_app.entity.User;
import org.springframework.security.core.context.SecurityContextHolder;

import java.util.Optional;

public class Utils {

    public static Optional<User> getCurrentUser() {
        Object principal = SecurityContextHolder.getContext().getAuthentication().getPrincipal();
        if (principal instanceof User) {
            return Optional.of((User) principal);
        }
        return Optional.empty();
    }
}
