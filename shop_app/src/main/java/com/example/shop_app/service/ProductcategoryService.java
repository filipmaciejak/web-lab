package com.example.shop_app.service;

import com.example.shop_app.entity.Productcategory;
import com.example.shop_app.repository.ProductcategoryRepository;
import lombok.RequiredArgsConstructor;
import org.springframework.stereotype.Service;

import java.util.List;

@Service
@RequiredArgsConstructor
public class ProductcategoryService {

    private final ProductcategoryRepository productcategoryRepository;

    public List<Productcategory> getAllProductCategories()
    {
        return productcategoryRepository.findAll();
    }

    public Productcategory getProductcategoryById(Integer id)
    {
        return productcategoryRepository.findProductcategoryById(id);
    }
}
