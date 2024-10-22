@include('includes.header')


<style>
    .page-item.active .page-link {
      color: white !important;
  }
  </style>

  <div class="container-fluid py-2">
    <div class="row align-items-center">
        <div class="col-md-4">
            <form method="GET" action="{{ route('price_plans') }}">
                <div class="input-group mb-1 mt-3">
                    <span>
                        <input type="text" name="search" class="form-control" style="padding: 10px; background-color: #e9e9e9; margin-left: 20px; width: 100%;" placeholder="Search by plan name" value="{{ request('search') }}">
                    </span>
                    <span>
                        <button class="btn btn-outline-secondary" type="submit" style="padding: 10px; height: 45px; margin-left : 35% ; color : #7b809a ">Search</button>
                    </span>
                </div>
            </form>
        </div>

        <div class="col-md-8 text-end mt-3 ">
            <a href="{{ route('price_plans.create') }}" class="btn btn-primary" style="background-color: #E63572; border-color: #E63572; margin-right : 2.5% ;font-size: 15px;">Add plan</a>
        </div>
    </div>
</div>


<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                        <h6 class="text-white text-capitalize ps-3">Plan table</h6>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-secondary opacity-7 text-center">Id</th>
                                    <th class="text-secondary opacity-7 text-center">Name</th>
                                    <th class="text-secondary opacity-7 text-center">Price</th>
                                    <th class="text-secondary opacity-7 text-center">Duration</th>
                                    <th class="text-secondary opacity-7 text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($plans as $plan)
                                <tr style="padding: 15px 0;">
                                    <td class="text-center">
                                        <p class="text-md font-weight-bold mb-0">{{ $plan->id }}</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-md font-weight-bold mb-0">{{ $plan->name }}</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-md font-weight-bold mb-0">{{ $plan->price }}</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-md font-weight-bold mb-0">{{ $plan->duration }}</p>
                                    </td>
                                    <td class="align-middle text-center" style="padding-top: 10px; padding-bottom: 10px;">
                                        <a href="{{ route('price_plans.show', $plan->id) }}" class="btn btn-view text-md" data-toggle="tooltip" data-original-title="View price_plans">
                                            <i class="fas fa-eye"></i> View
                                        </a>
                                        <a href="{{ route('price_plans.edit', $plan->id) }}" class="btn btn-edit text-md" data-toggle="tooltip" data-original-title="Edit price_plans">
                                            <i class="fas fa-edit"></i> Edit
                                        </a>
                                        <form action="{{ route('price_plans.destroy', $plan->id) }}" method="POST" style="display:inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <a href="javascript:;" class="btn btn-delete text-md" data-toggle="tooltip" data-original-title="Delete price_plans"
                                               onclick="if(confirm('Are you sure you want to delete this price_plans?')) { this.closest('form').submit(); }">
                                                <i class="fas fa-trash-alt"></i> Delete
                                            </a>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <br>
                    <div style="display: flex; justify-content: center; align-items: center; color : white">
                        {{ $plans->links('pagination::bootstrap-4') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</main>

<!-- Core JS Files -->
<script src="{{ asset('js/core/popper.min.js') }}"></script>
<script src="{{ asset('js/core/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/plugins/perfect-scrollbar.min.js') }}"></script>
<script src="{{ asset('js/plugins/smooth-scrollbar.min.js') }}"></script>
<script async defer src="https://buttons.github.io/buttons.js"></script>
<script src="{{ asset('js/material-dashboard.min.js?v=3.1.0') }}"></script>