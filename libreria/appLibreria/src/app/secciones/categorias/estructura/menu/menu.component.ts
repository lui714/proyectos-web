import { Component, OnInit } from '@angular/core';
import { MsnApiCategorias } from 'src/app/interfaces/CategoriasInterface';
import { CategoriasService } from 'src/app/services/categorias.service';
//import { ICategoria } from 'src/app/interfaces/CategoriasInterface';
@Component({
  selector: 'app-menu',
  templateUrl: './menu.component.html',
  styleUrls: ['./menu.component.scss']
})
export class MenuComponent implements OnInit {
  respuesta: MsnApiCategorias[];
  constructor(private catService: CategoriasService) { }

  async ngOnInit() {
    this.respuesta = await this.catService.getCategorias();
  }

}
