import { ComponentFixture, TestBed } from '@angular/core/testing';
import { ToolbarComponent } from './toolbar.component';
import { By } from '@angular/platform-browser';

describe('ToolbarComponent', () => {
  let component: ToolbarComponent;
  let fixture: ComponentFixture<ToolbarComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ToolbarComponent],
    }).compileComponents();

    fixture = TestBed.createComponent(ToolbarComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('devrait créer le composant', () => {
    expect(component).toBeTruthy();
  });

  it('devrait émettre "add" quand le bouton Ajouter est cliqué', () => {
    spyOn(component.add, 'emit');

    const button = fixture.debugElement.query(By.css('button:nth-child(1)')).nativeElement;
    button.click();

    expect(component.add.emit).toHaveBeenCalled();
  });

  it('devrait émettre "delete" quand le bouton Supprimer est cliqué', () => {
    spyOn(component.delete, 'emit');

    const button = fixture.debugElement.query(By.css('button:nth-child(2)')).nativeElement;
    button.click();

    expect(component.delete.emit).toHaveBeenCalled();
  });

  it('devrait émettre "refresh" quand le bouton Rafraîchir est cliqué', () => {
    spyOn(component.refresh, 'emit');

    const button = fixture.debugElement.query(By.css('button:nth-child(3)')).nativeElement;
    button.click();

    expect(component.refresh.emit).toHaveBeenCalled();
  });
});