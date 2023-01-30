package com.example.shop_app.entity;

import jakarta.persistence.*;
import jakarta.validation.constraints.Min;
import jakarta.validation.constraints.NotBlank;
import jakarta.validation.constraints.NotNull;
import jakarta.validation.constraints.Size;
import lombok.*;

@Entity
@Getter
@Setter
@Builder
@ToString
@AllArgsConstructor
@RequiredArgsConstructor
@Table(name = "products")
public class Product {
    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    @Column(name = "id", nullable = false)
    private Integer id;

    @NotNull
    @ManyToOne(fetch = FetchType.LAZY, optional = false)
    @JoinColumn(name = "productcategoryid", nullable = false)
    private Productcategory productcategory;

    @Column(name = "name", nullable = false)
    private String name;

    @Column(name = "weight")
    private Float weight;

    @Column(name = "price", nullable = false)
    private Float price;

    @Column(name = "code", nullable = false)
    private String code;

}