package com.example.shop_app.service;

import com.example.shop_app.entity.Role;
import com.example.shop_app.entity.User;
import com.example.shop_app.exception.NonUniqueLoginException;
import com.example.shop_app.repository.UserRepository;
import lombok.RequiredArgsConstructor;
import org.springframework.security.crypto.password.PasswordEncoder;
import org.springframework.stereotype.Service;

import java.util.Optional;

@Service
@RequiredArgsConstructor
public class UserService {

    private final UserRepository userRepository;
    private final PasswordEncoder passwordEncoder;

    public Optional<User> getUserByLogin(final String login) {
        return userRepository.findByLogin(login);
    }
    public void registerUser(final User user) throws NonUniqueLoginException {
        if (doesLoginExist(user.getLogin())) {
            throw new NonUniqueLoginException("User with this login already exists!");
        }
        user.setPassword(passwordEncoder.encode(user.getPassword()));
        user.setRole(Role.CUSTOMER);
        userRepository.save(user);
    }

    public boolean doesLoginExist(String login) {
        return getUserByLogin(login).isPresent();
    }
}
