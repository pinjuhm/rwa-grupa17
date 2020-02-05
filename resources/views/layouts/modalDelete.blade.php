<div class="modal fade" id="modalDelete-{{$id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Jeste li sigurni da želite izbrisati ovaj {{$item}}?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Zatvori</button>
                <button type="submit" class="btn btn-danger" form_id="{{$item}}Delete-{{ $id }}">Izbriši</button>
            </div>
        </div>
    </div>
</div>
