package com.example.shop_app.repository;

import com.example.shop_app.entity.Productcategory;
import org.springframework.data.jpa.repository.JpaRepository;

public interface ProductcategoryRepository extends JpaRepository<Productcategory, Integer> {

    Productcategory findProductcategoryById(Integer id);
}
