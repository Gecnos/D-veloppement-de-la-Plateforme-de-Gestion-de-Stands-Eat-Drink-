import { Component, OnInit } from '@angular/core';
import { ProductService } from 'src/app/core/services/product.service';
import { Product } from 'src/app/core/models/product.model';

@Component({
  selector: 'app-home',
  templateUrl: './home.component.html',
})
export class HomeComponent implements OnInit {
  featuredProducts: Product[] = [];

  constructor(private productService: ProductService) {}

  ngOnInit() {
    this.loadProducts();
  }

  loadProducts() {
    this.productService.getProducts().subscribe(products => {
      this.featuredProducts = products;
    });
  }

  handleAdd() {
    console.log('Ajouter un produit');
    // Afficher un formulaire ou rediriger vers une page d’ajout
  }

  handleDelete() {
    console.log('Supprimer un produit');
    // Supprimer un produit sélectionné
  }

  handleRefresh() {
    console.log('Rafraîchir la liste');
    this.loadProducts(); // Recharge les produits
  }
}