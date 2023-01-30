package com.example.shop_app.repository;

import com.example.shop_app.entity.Product;
import org.springframework.data.jpa.repository.JpaRepository;

public interface ProductRepository extends JpaRepository<Product, Integer> {

    Product findProductByCode(String code);
}
