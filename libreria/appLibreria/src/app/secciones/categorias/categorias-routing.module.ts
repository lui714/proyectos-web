import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { ListarComponent } from './acciones/listar/listar.component';
import { CategoriasComponent } from './categorias.component';
import { MenuComponent } from './estructura/menu/menu.component';

const routes: Routes = [
  { path: '', component: CategoriasComponent,
    children: [
      { path: ':CatId/libros', component: ListarComponent }
    ]
  },


];
@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule]
})
export class CategoriasRoutingModule { }
