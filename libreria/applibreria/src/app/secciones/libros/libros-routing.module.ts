import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { ListarComponent } from './acciones/listar/listar.component';
import { NewComponent } from './acciones/new/new.component';
import { LibrosComponent } from './libros.component';

const routes: Routes = [
  { path: '', component: LibrosComponent , 
    children: [
      { path: 'listar', component: ListarComponent },
      { path: 'create', component: NewComponent}
    ]}
  
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule]
})
export class LibrosRoutingModule { }
