import { Component, Input, OnInit } from '@angular/core';
import { MsnApiLibros } from '../../../../interfaces/LibrosInterface';
import { ActivatedRoute, ParamMap } from '@angular/router';
import { LibrosService } from 'src/app/services/libros/libros.service';
import { FiltrosService } from 'src/app/services/libros/filtros.service';
import { Observable } from 'rxjs';


@Component({
  selector: 'app-listar-Libros',
  templateUrl: './listar.component.html',
  styleUrls: ['./listar.component.scss']
})
export class ListarComponent implements OnInit {
  // tslint:disable-next-line:no-input-rename
  @Input('datos') datos: Observable<MsnApiLibros[]>;
  respuesta: MsnApiLibros[];
  idCat: number;
  constructor(private librosService: LibrosService, public filtros:FiltrosService,  private route: ActivatedRoute) {
    this.idCat = Number(this.route.snapshot.paramMap.get('CatId'));
    console.log('this.idCat');
   }

  async ngOnInit() {
    console.log('init');
    this.datos.subscribe(data => {
      console.log ('entra');
      console.log(data);
      this.respuesta = data;
    });
   // this.respuesta = await this.librosService.getLibros();
  //  this.idCat = Number(this.route.snapshot.paramMap.get('CatId'));
  //  this.route.paramMap.subscribe((params: ParamMap) => {
  //    this.idCat = Number(params.get('CatId'));
   //   this.getLibros(this.idCat);
  //    console.log(this.idCat);
 //   });
 //   console.log(this.idCat);
   /* this.filtros.librosObservable
    .subscribe (respuesta => {
      this.respuesta = respuesta;
      console.log (this.respuesta);
  });*/
  }
  async getLibros(idCat){
    this.respuesta= await this.filtros.getFilter(this.idCat);
  }
  async  ionViewWillEnter(){
    console.log('sds');
    this.idCat = Number(this.route.snapshot.paramMap.get('CatId'));
    console.log(this.idCat);
  //  this.respuesta = this.filtros.respuesta;
    console.log(this.respuesta);
  }

}
