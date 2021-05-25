import { Component, Input, OnInit } from '@angular/core';
import { MsnApiCategorias } from 'src/app/interfaces/CategoriasInterface';
import { IEditor } from 'src/app/interfaces/EditoresInterface';
import { CategoriasService } from 'src/app/services/categorias.service';
import { LibrosService } from 'src/app/services/libros/libros.service';
import { EditoresService } from '../../../../services/editores.service';
import { Router, ActivatedRoute } from '@angular/router';
import { FiltrosService } from 'src/app/services/libros/filtros.service';

@Component({
  selector: 'app-menu',
  templateUrl: './menu.component.html',
  styleUrls: ['./menu.component.scss']
})

export class MenuComponent implements OnInit {
  respuesta: MsnApiCategorias[];
  respEditores: IEditor[];
  precio: number;
  items: number[] = [];
  constructor(private catService: CategoriasService,
              private librosService: LibrosService,
              private filtros: FiltrosService,
              private router: Router,
              private edService: EditoresService) { }

  async ngOnInit() {
    this.precio = 40;
    this.respuesta = await this.catService.getCategorias();
    this.respEditores = await this.edService.getAll();
  }

  async selectCat (valor) {
    console.log(valor);
    let i = this.items.indexOf(valor);
    if (i == -1){
      this.items.push(valor)
    }else {
      this.items.splice(i, 1)
    }
    console.log(this.items);
    let r = await this.filtros.getFilter(valor);
    console.log(r);
   // this.router.navigate(['libros', 'categoria', valor]);

  }

  async filtrar(){
    console.log('filtro');

  }

}
