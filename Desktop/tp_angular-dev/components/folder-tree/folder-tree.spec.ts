import { ComponentFixture, TestBed } from '@angular/core/testing';

import { FolderTree } from './folder-tree';

describe('FolderTree', () => {
  let component: FolderTree;
  let fixture: ComponentFixture<FolderTree>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [FolderTree]
    })
    .compileComponents();

    fixture = TestBed.createComponent(FolderTree);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
