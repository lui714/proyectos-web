import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { EditoresComponent } from './editores.component';

const routes: Routes = [
  { path: '', component: EditoresComponent }, 
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule]
})
export class EditoresRoutingModule { }
