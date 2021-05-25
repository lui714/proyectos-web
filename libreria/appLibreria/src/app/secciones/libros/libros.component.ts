import { Component, OnInit } from '@angular/core';
import { LibrosService } from '../../services/libros/libros.service';
import { CategoriasService } from '../../services/categorias.service';
import { MsnApiCategorias } from '../../interfaces/CategoriasInterface';

@Component({
  selector: 'app-libros',
  templateUrl: './libros.component.html',
  styleUrls: ['./libros.component.scss']
})
export class LibrosComponent implements OnInit {
  respuesta: MsnApiCategorias[];

  constructor(private catService: CategoriasService) {

  }
  async ngOnInit() {
    this.respuesta = await this.catService.getCategorias();
  }

}
