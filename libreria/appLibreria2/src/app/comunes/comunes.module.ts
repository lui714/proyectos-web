import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';

import { ComunesRoutingModule } from './comunes-routing.module';
import { BreadcrumbComponent } from './breadcrumb/breadcrumb.component';


@NgModule({
  declarations: [
    BreadcrumbComponent
  ],
  exports: [
    BreadcrumbComponent
  ],
  imports: [
    CommonModule,
    ComunesRoutingModule
  ]
})
export class ComunesModule { }
