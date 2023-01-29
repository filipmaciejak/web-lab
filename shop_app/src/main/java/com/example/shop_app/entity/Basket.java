package com.example.shop_app.entity;

import jakarta.persistence.*;
import jakarta.validation.constraints.NotNull;
import lombok.*;

import java.util.LinkedHashSet;
import java.util.Set;

@Entity
@Getter
@Setter
@Builder
@ToString
@AllArgsConstructor
@RequiredArgsConstructor
@Table(name = "baskets")
public class Basket {
    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    @Column(name = "id", nullable = false)
    private Integer id;

    @NotNull
    @ManyToOne(fetch = FetchType.LAZY, optional = false)
    @JoinColumn(name = "userid", nullable = false)
    private User userid;

    @ManyToMany
    @JoinTable(name = "baskets_products",
            joinColumns = @JoinColumn(name = "basketid"),
            inverseJoinColumns = @JoinColumn(name = "productid"))
    private Set<Product> products = new LinkedHashSet<>();

}