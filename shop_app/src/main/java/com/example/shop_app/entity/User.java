package com.example.shop_app.entity;

import jakarta.persistence.*;
import jakarta.validation.constraints.NotNull;
import jakarta.validation.constraints.Size;
import lombok.*;

import java.util.Date;

@Entity
@Getter
@Setter
@Builder
@ToString
@AllArgsConstructor
@RequiredArgsConstructor
@Table(name = "\"Users\"")
public class User {
    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    @Column(name = "id", nullable = false)
    private Integer id;

    @Size(max = 255)
    @NotNull
    @Column(name = "name", nullable = false)
    private String name;

    @Size(max = 255)
    @NotNull
    @Column(name = "surname", nullable = false)
    private String surname;

    @Size(max = 11)
    @NotNull
    @Column(name = "pesel", nullable = false, length = 11)
    private String pesel;

    @Column(name = "\"Date_of_birth\"")
    private Date dateOfBirth;

    @Size(max = 1)
    @Column(name = "gender", length = 1)
    private String gender;

    @Size(max = 255)
    @NotNull
    @Column(name = "email", nullable = false)
    private String email;

    @Size(max = 255)
    @Column(name = "\"Phone_number\"")
    private String phoneNumber;

}