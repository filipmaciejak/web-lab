package com.example.shop_app.info;

import jakarta.persistence.Column;
import jakarta.validation.constraints.Min;
import jakarta.validation.constraints.NotBlank;
import jakarta.validation.constraints.NotNull;
import jakarta.validation.constraints.Size;
import lombok.AllArgsConstructor;
import lombok.Getter;
import lombok.RequiredArgsConstructor;
import lombok.Setter;

@Getter
@Setter
@AllArgsConstructor
@RequiredArgsConstructor
public class ProductInfo {

    @Size(max = 255)
    @NotBlank(message="Invalid product name!")
    private String name;
    @Size(max = 255)
    @NotBlank(message="Invalid product code!")
    private String code;

    @Min(0)
    private Float weight;

    @Min(0)
    @NotNull(message="Invalid price!")
    private Float price;
    @NotNull(message="Please choose a category!")
    private String productcategory;
}
