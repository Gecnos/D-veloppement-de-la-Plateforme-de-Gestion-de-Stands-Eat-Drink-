import { Component, EventEmitter, Output } from '@angular/core';

@Component({
  selector: 'app-toolbar',
  templateUrl: './toolbar.component.html',
  styleUrls: ['./toolbar.component.scss']
})
export class ToolbarComponent {
  @Output() add = new EventEmitter<void>();
  @Output() delete = new EventEmitter<void>();
  @Output() refresh = new EventEmitter<void>();

  onAddClick() {
    this.add.emit();
  }

  onDeleteClick() {
    this.delete.emit();
  }

  onRefreshClick() {
    this.refresh.emit();
  }
}