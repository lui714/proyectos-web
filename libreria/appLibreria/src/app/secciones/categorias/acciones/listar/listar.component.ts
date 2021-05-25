import { Component, OnInit } from '@angular/core';
import { ActivatedRoute, ParamMap } from '@angular/router';
import { MsnApiLibros } from 'src/app/interfaces/LibrosInterface';
import { CategoriasService } from 'src/app/services/categorias.service';

@Component({
  selector: 'app-listar',
  templateUrl: './listar.component.html',
  styleUrls: ['./listar.component.scss']
})
export class ListarComponent implements OnInit {
  idCat: number;
  respuesta: MsnApiLibros[];
  constructor(private route: ActivatedRoute, private catService: CategoriasService) { }

  async ngOnInit(){

    this.route.paramMap.subscribe((parametros: ParamMap) => {
      this.idCat = Number(this.route.snapshot.paramMap.get('CatId'));
      this.getLibros();
    })


  }

  async getLibros(){
    console.log(this.idCat);
    this.respuesta = await this.catService.getLibros(this.idCat);
    console.log(this.respuesta);
  }

}
