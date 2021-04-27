import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';

const routes: Routes = [
  { path: '', loadChildren: () => import('./home/home.module').then( m => m.HomeModule) },
  
  { path: 'libros', loadChildren: () => import('./libros/libros.module').then( m => m.LibrosModule) },
  { path: 'editores', loadChildren: () => import('./editores/editores.module').then( m => m.EditoresModule) },
  { path: 'categorias', loadChildren: () => import('./categorias/categorias.module').then( m => m.CategoriasModule) }

];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule]
})
export class SeccionesRoutingModule { }
