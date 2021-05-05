import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { CategoriasRoutingModule } from './categorias-routing.module';
import { CategoriasComponent } from './categorias.component';
import { MenuComponent } from './estructura/menu/menu.component';
import { CuerpoComponent } from './estructura/cuerpo/cuerpo.component';


@NgModule({
  declarations: [ MenuComponent, CuerpoComponent, CategoriasComponent ],
  imports: [
    CommonModule,
    CategoriasRoutingModule
  ]
})
export class CategoriasModule { }
