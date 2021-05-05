import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';

import { EditoresRoutingModule } from './editores-routing.module';
import { MenuComponent } from './estructura/menu/menu.component';
import { CuerpoComponent } from './estructura/cuerpo/cuerpo.component';
import { EditoresComponent } from './editores.component';
import { ComunesModule } from '../../comunes/comunes.module';


@NgModule({
  declarations: [
    CuerpoComponent, MenuComponent,EditoresComponent
  ],
  imports: [
    CommonModule,
    EditoresRoutingModule,
    ComunesModule
  ]
})
export class EditoresModule { }
