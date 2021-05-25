import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';

import { UsuariosComponent } from './usuarios/usuarios.component';

const routes: Routes = [
  { path: '', loadChildren: () => import('./home/home.module').then( m => m.HomeModule) },

  { path: 'libros', loadChildren: () => import('./libros/libros.module').then( m => m.LibrosModule) },
  { path: 'categorias', loadChildren: () => import('./categorias/categorias.module').then( m => m.CategoriasModule) },
  { path: 'editores', loadChildren: () => import('./editores/editores.module').then( m => m.EditoresModule) },

  { path: 'usuarios', component: UsuariosComponent, pathMatch: 'full' }

];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule]
})
export class SeccionesRoutingModule { }
