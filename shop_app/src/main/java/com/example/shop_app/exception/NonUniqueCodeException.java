package com.example.shop_app.exception;

public class NonUniqueCodeException extends Exception {

    public NonUniqueCodeException() {
        super();
    }

    public NonUniqueCodeException(String message) {
        super(message);
    }
}
