<div class="col-md-8">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($categories) > 0)
                                @foreach ($categories as $category)
                                <tr wire:key="{{ $category->id }}">
                                        <td>
                                            {{ isset($category->category_name[$selectedLanguage]) ? $category->category_name[$selectedLanguage] : '' }}
                                        </td>
                                        <td>
                                            {{ isset($category->sort_desc[$selectedLanguage]) ? $category->sort_desc[$selectedLanguage] : '' }}
                                        </td>
                                        <td>
                                            <button wire:click="editPost({{$category->id}})" class="btn btn-primary btn-sm">Edit</button>
                                            <button wire:click="delete({{$category->id}})" class="btn btn-danger btn-sm">Delete</button>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="3" align="center">
                                        No Posts Found.
                                    </td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                    {{ $categories->links() }}
                </div>
            </div>
        </div>
    </div>
