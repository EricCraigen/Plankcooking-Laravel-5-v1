<?php

Route::get('/', function () {
    return view('home');
}) -> name("home");

Route::group(["prefix" => "/"], function() {
    Route::get("about", function() {
        return view("single-pages.about");
    }) -> name("sp.about");

    Route::get("contact", function() {
        return view("single-pages.contact");
    }) -> name("sp.contact");

    Route::get("reviews", function() {
        return view("single-pages.reviews");
    }) -> name("sp.reviews");
});


Route::group(["prefix" => "/"], function() {
    Route::get("shop", function() {
        return view("shop.shop");
    }) -> name("shop.shop");
});


Route::group(["prefix" => "/"], function() {
    Route::get("cart", function() {
        return view("cart.cart");
    }) -> name("cart.cart");
});
