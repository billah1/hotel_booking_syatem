  <!--Create modal -->
  <div class="col-lg-4 col-md-6">
    <div class="mt-3">
      <!-- Modal -->
      <form 
        action="{{ route('type.update',$roomType->id) }}" 
        method="post" 
        class="needs-validation" 
        role="form"
        novalidate
      >
        @csrf
        @method('patch')
        <div class="modal fade" id="myDynamicEditModal" tabindex="-1" style="display: none;" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel1">Update Room</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"aria-label="{{ trans('sentence.close')}}"></button>
              </div>
              <div class="modal-body">
                @include('admin.system.room_type.modal._input')
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
  <!--End Create modal -->