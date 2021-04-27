import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';

import { LibrosRoutingModule } from './libros-routing.module';
import { LibrosComponent } from './libros.component';
import { MenuComponent } from './estructura/menu/menu.component';
import { CuerpoComponent } from './estructura/cuerpo/cuerpo.component';
import { AsideComponent } from './estructura/aside/aside.component';
import { ListarComponent } from './acciones/listar/listar.component';
import { NewComponent } from './acciones/new/new.component';


@NgModule({
  declarations: [
    LibrosComponent,
    MenuComponent,
    CuerpoComponent,
    AsideComponent,
    ListarComponent,
    NewComponent
  ],
  imports: [
    CommonModule,
    LibrosRoutingModule
  ]
})
export class LibrosModule { }
