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
          width: 200px;
          margin-left: 25px;
        }

        .p-3, .dataTables_empty{
            color:white!important;
        }
      </style>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <!-- Set up the datatable -->
                    <div class="container mt-4">
                        <!-- Create the drop down filter -->
                        <div class="category-filter">
                          <select id="categoryFilter" class="form-control">
                            <option value="">Show All</option>
                            <option value="Tokyo">Tokyo</option>
                            <option value="Hip Hop">Hip Hop</option>
                            <option value="Jazz">Jazz</option>
                          </select>
                        </div>
                      </div>
                        <table class="table" id="filterTable">
                            <thead>
                                <tr>
                                    <th>Plugin Name</th>
                                    <th>Folder Plugin Name</th>
                                    <th>Plugin Type</th>
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
                                        <x-bladewind.button.circle size="small" icon="trash" color="red" />
                                    </td>
                                </tr>
                            @endforeach
                            <tfoot>
                                <tr>
                                    <th>Plugin Name</th>
                                    <th>Folder Plugin Name</th>
                                    <th>Plugin Type</th>
                                    <th>Plugin Status</th>
                                    <th>Plugin URL Download</th>
                                    <th>Version</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                        </table>
                </div>
            </div>
        </div>
    </div>




</x-app-layout>
