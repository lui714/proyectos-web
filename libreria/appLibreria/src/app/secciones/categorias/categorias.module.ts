import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { CategoriasRoutingModule } from './categorias-routing.module';
import { CategoriasComponent } from './categorias.component';
import { MenuComponent } from './estructura/menu/menu.component';
import { CuerpoComponent } from './estructura/cuerpo/cuerpo.component';
import { ListarComponent } from './acciones/listar/listar.component';
import { LibrosModule } from '../libros/libros.module';
import { PipesModule } from 'src/app/pipes/pipes.module';


@NgModule({
  declarations: [ MenuComponent, CuerpoComponent, CategoriasComponent, ListarComponent ],
  imports: [
    CommonModule,
    CategoriasRoutingModule,LibrosModule,
    PipesModule
  ]
})
export class CategoriasModule { }
