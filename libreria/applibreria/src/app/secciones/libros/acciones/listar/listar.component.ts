import { Component, OnInit } from '@angular/core';
import { LibrosService } from 'src/app/services/libros.service';

@Component({
  selector: 'app-listar',
  templateUrl: './listar.component.html',
  styleUrls: ['./listar.component.scss']
})
export class ListarComponent implements OnInit {

  //el componete actual INYECTA a la clase LibrosService
  constructor(private librosService: LibrosService) {
    this.librosService.getAll();
  }

  ngOnInit(): void {
  }

}
