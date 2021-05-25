import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';

import { LibrosRoutingModule } from './libros-routing.module';
import { MenuComponent } from './estructura/menu/menu.component';
import { LibrosComponent } from './libros.component';
import { CuerpoComponent } from './estructura/cuerpo/cuerpo.component';
import { AsideComponent } from './estructura/aside/aside.component';
import { ListarComponent } from './acciones/listar/listar.component';
import { ComunesModule } from '../../comunes/comunes.module';
import { FormsModule } from '@angular/forms';


@NgModule({
  declarations: [
    LibrosComponent, CuerpoComponent, AsideComponent, MenuComponent, ListarComponent
  ],
  imports: [
    CommonModule,FormsModule,
    LibrosRoutingModule,
    ComunesModule
  ],
  exports: [ ListarComponent ]
})
export class LibrosModule { }
