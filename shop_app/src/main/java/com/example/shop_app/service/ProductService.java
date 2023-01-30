package com.example.shop_app.service;

import com.example.shop_app.Utils;
import com.example.shop_app.entity.Product;
import com.example.shop_app.entity.Productcategory;
import com.example.shop_app.entity.User;
import com.example.shop_app.exception.NonUniqueCodeException;
import com.example.shop_app.info.ProductInfo;
import com.example.shop_app.repository.ProductRepository;
import lombok.RequiredArgsConstructor;
import org.springframework.stereotype.Service;

import java.nio.file.attribute.UserPrincipalNotFoundException;
import java.util.List;
import java.util.Optional;

@Service
@RequiredArgsConstructor
public class ProductService {

    private final ProductRepository productRepository;

    private final ProductcategoryService productcategoryService;

    public List<Product> getAllProducts()
    {
        return productRepository.findAll();
    }

    public void saveProduct(ProductInfo productInfo) throws UserPrincipalNotFoundException, NonUniqueCodeException {
        Optional<User> currentUser = Utils.getCurrentUser();
        Productcategory productcategory = productcategoryService.getProductcategoryById
                (Integer.parseInt(productInfo.getProductcategory()));

        if(currentUser.isEmpty())
        {
            throw new UserPrincipalNotFoundException("User not logged in");
        }

        if (productRepository.findProductByCode(productInfo.getCode()) != null)
        {
            throw new NonUniqueCodeException("Product code must be unique!");
        }
        productRepository.save(Product.builder().code(productInfo.getCode())
                .name(productInfo.getName())
                .weight(productInfo.getWeight())
                .price(productInfo.getPrice())
                .productcategory(productcategory)
                .build());

    }
}
