<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight flex justify-between items-center">
            {{ __('Plugin Installer Admin') }}
            <span>
                <x-bladewind.button color="black" icon="plus-small" icon_right="true" size="tiny" onclick="window.location='{{ route('plugins.create') }}'"> {{ __('Add Plugin') }} </x-bladewind.button>
            </span>
        </h2>
    </x-slot>


    <style>
        select.form-control{
          display: inline;
          width: 140px;
          margin-left: 25px;
        }

        .p-3, .dataTables_empty{
            color:black!important;
        }

        #filterTable_wrapper > div > div.my-2.col-span-2.border.border-gray-200.rounded.min-w-full.bg-white.dark\:bg-gray-800.dark\:border-gray-700{
            margin-top: 50px!important;
            margin-bottom: 50px!important;
        }

        #filterTable_filter > label > input{
            background-color: white!important;
        }

        #filterTable_length > label > select{
            background-color: white!important;
            width: 12%!important;
        }

        #filterTable > thead, #filterTable > tfoot > tr {
            background-color:whitesmoke!important;}

        #filterTable > tbody{
            background-color: white!important;
        }

        .dark\:even\:bg-gray-900\/50:nth-child(even){
            background-color: whitesmoke!important;
        }

        .delete svg{
            color: white!important;
            background-color: red!important;
            border-radius: 100px!important;
        }

        #filterTable_previous, #filterTable_next{
            background-color: whitesmoke!important;
        }
      </style>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                        <!-- Create the drop down filter -->
                        <div class="category-filter">
                          <select id="categoryFilter" class="form-control py-2 rounded-lg ml-2 px-3">
                            <option value="">Show All</option>
                            <option value="General">General</option>
                            <option value="Woocommerce">Woocommerce</option>
                          </select>
                        </div>

                        <table class="table" id="filterTable">
                            <thead>
                                <tr>
                                    <th>Plugin Name</th>
                                    <th>Folder Plugin Name</th>
                                    <th>Types</th>
                                    <th>Plugin Status</th>
                                    <th>Plugin URL Download</th>
                                    <th>Version</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            @foreach ($plugins as $plugin)
                                <tr>
                                    <td>{{$plugin->plugin_name}}</td>
                                    <td>{{$plugin->folder_plugin}}</td>
                                    <td>{{$plugin->plugin_type }}</td>
                                    <td>{{$plugin->plugin_status }}</td>
                                    <td>{{$plugin->url }}</td>
                                    <td>{{$plugin->version }}</td>
                                    <td>
                                        <x-bladewind.button.circle size="small" icon="pencil" onclick="window.location='{{ route('plugins.edit', $plugin) }}'"/>
                                        <form id="deleteForm{{$plugin->id}}" method="POST" action="{{ route('plugins.destroy', $plugin) }}" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <x-bladewind.button.circle size="small" icon="trash" class="delete" color="red" type="button" onclick="confirmDelete('deleteForm{{$plugin->id}}')"/>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            <tfoot>
                                {{-- <tr>
                                    <th>Plugin Name</th>
                                    <th>Folder Plugin Name</th>
                                    <th>Plugin Type</th>
                                    <th>Plugin Status</th>
                                    <th>Plugin URL Download</th>
                                    <th>Version</th>
                                    <th>Action</th>
                                </tr> --}}
                            </tfoot>
                        </table>
                </div>
            </div>
        </div>
    </div>
    <script>
        function confirmDelete(formId) {
            if (confirm('Are you sure?')) {
                document.getElementById(formId).submit();
            }
        }
    </script>




</x-app-layout>
