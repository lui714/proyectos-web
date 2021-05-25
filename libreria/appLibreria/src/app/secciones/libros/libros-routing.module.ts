import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { ListarComponent } from './acciones/listar/listar.component';
import { LibrosComponent } from './libros.component';

const routes: Routes = [
  { path: '', component: LibrosComponent , outlet: 'primary',
    children: [
      { path: 'listar', component: ListarComponent, outlet: 'cuerpo' },
      { path: 'categoria/:CatId', component: ListarComponent }
    ]
  },


];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule]
})
export class LibrosRoutingModule { }
