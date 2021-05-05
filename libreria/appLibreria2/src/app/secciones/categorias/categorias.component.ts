import { Component, OnInit } from '@angular/core';
import { CategoriasService } from '../../services/categorias.service';
import { MsnApiCategorias } from '../../interfaces/CategoriasInterface';

@Component({
  selector: 'app-categorias',
  templateUrl: './categorias.component.html',
  styleUrls: ['./categorias.component.scss']
})
export class CategoriasComponent implements OnInit {
  respuesta: MsnApiCategorias[];
  constructor(private categoriasService: CategoriasService) { }

  async ngOnInit() {
    this.respuesta = await this.categoriasService.getCategorias();
    console.log (this.respuesta);
  }

}
