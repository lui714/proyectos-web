import { Component, OnInit } from '@angular/core';
import { LibrosService } from 'src/app/services/libros.service';

import { MsnApiLibros } from '../../../../interfaces/LibrosInterface';
import { ActivatedRoute } from '@angular/router';

@Component({
  selector: 'app-listar',
  templateUrl: './listar.component.html',
  styleUrls: ['./listar.component.scss']
})
export class ListarComponent implements OnInit {
  respuesta: MsnApiLibros[];
  idCat: number;
  constructor(private librosService: LibrosService, private route: ActivatedRoute) {
    this.idCat = Number(this.route.snapshot.paramMap.get('CatId'));
    console.log(this.idCat);
   }

  async ngOnInit() {
    this.respuesta = await this.librosService.getLibros();
    this.idCat = Number(this.route.snapshot.paramMap.get('CatId'));
    console.log(this.idCat);
  }
  ionViewWillEnter(){
    console.log('sds');
    this.idCat = Number(this.route.snapshot.paramMap.get('CatId'));
    console.log(this.idCat);
  }

}
