import { TestBed } from '@angular/core/testing';

import { EditoresService } from './editores.service';

describe('EditoresService', () => {
  let service: EditoresService;

  beforeEach(() => {
    TestBed.configureTestingModule({});
    service = TestBed.inject(EditoresService);
  });

  it('should be created', () => {
    expect(service).toBeTruthy();
  });
});
