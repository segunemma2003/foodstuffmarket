@extends('../layout/' . layout())

@section('subhead')
    <title>@translate(Perfex CRM)</title>
@endsection

@section('subcontent')

  <div class="flex items-center mt-8">
        <h2 class="intro-y text-lg font-medium mr-auto">@translate(Perfex CRM)</h2>
    </div>
    <!-- BEGIN: Wizard Layout -->
    <div class="intro-y box mt-5">

        <div class="px-5 sm:px-20 mt-10 pt-10 border-t border-gray-200 dark:border-dark-5">
            <!-- BEGIN: Form Layout -->
            <form action="{{ route('perfex.store') }}" method="POST">
                @csrf
                <div class="intro-y box p-5">
                    <div>
                        <label>@translate(Perfex User Email)</label>
                        <input type="text" value="{{ $perfex->user_email ?? null }}" class="input w-full border mt-2" name="user_email" placeholder="Perfex User Email">
                    </div>

                    <div class="mt-3">
                      <div>
                          <label>@translate(Perfex Installed URL)</label>
                          <input type="text"  value="{{ $perfex->application_url ?? null }}" class="input w-full border mt-2" name="application_url" placeholder="Perfex Installed URL">
                      </div>
                    </div>

                    <div class="text-right mt-5">
                        <button type="submit" class="button w-full bg-theme-1 text-white">@translate(Save Configuration)</button>
                    </div>

                </div>
            </form>
            <!-- END: Form Layout -->

            @if ($perfex->user_email ?? null != null && $perfex->application_url ?? null != null)

                <!-- BEGIN: Form Layout -->
                <form action="{{ route('perfex.generate.token') }}" method="POST">
                    @csrf
                    <div class="intro-y box p-5">

                        <div class="mt-3">
                            <div>
                                <label>@translate(Perfex User Token)</label>
                                <input type="text" 
                                        value="{{ $perfex->user_token ?? null }}" 
                                        class="input w-full border mt-2" 
                                        name="user_token" 
                                        placeholder="Perfex User Token" disabled>
                            </div>
                        </div>

                        <div class="text-right mt-5">
                            <button type="submit" 
                                    class="button w-full bg-theme-1 text-white">
                                    @translate(Generate Token)
                            </button>
                        </div>
                    </div>
                </form>
                <!-- END: Form Layout -->
                
            @endif


            
            <div class="intro-y px-4 col-span-12 flex flex-wrap sm:flex-no-wrap items-center mt-2 mb-2">

                <a href="{{ route('perfex.fetch.data') }}" 
                    class="button text-white bg-theme-1 shadow-md mr-2 w-4/12 tooltip" 
                    title="@translate(Fetch Contacts)">
                    @translate(Fetch Contacts)
                </a>

                @if (session()->has('perfex') && session('perfex')->count() > 0)
                <a href="{{ route('perfex.fetch.store') }}" 
                    class="button text-white bg-theme-1 shadow-md mr-2 w-4/12 tooltip" 
                    title="@translate(Store To The Database)">
                    @translate(Store To The Database)
                </a>
                @endif

            </div>

            @if (session()->has('perfex'))
                <div class="mt-2">
                    <p>@translate(Total ) <strong>{{ session('perfex')->count() }}</strong> {{ Str::plural('Contacts', session('perfex')->count()) }} @translate(fetched)</p>
                </div>
            @endif

            {{-- Fetch data --}}
            <table class="table table-report -mt-2">
                <thead>
                    <tr>
                        <th class="whitespace-no-wrap">@translate(SL.)</th>
                        <th class="text-center whitespace-no-wrap">@translate(Name)</th>
                        <th class="text-center whitespace-no-wrap">@translate(Email)</th>
                        <th class="text-center whitespace-no-wrap">@translate(Phone)</th>
                    </tr>
                </thead>
                <tbody class="mailLogName">
                    @if (session()->has('perfex'))
                        @forelse (session('perfex') as $perfex)
                            <tr class="intro-x">
                                <td class="text-center">
                                    {{ $loop->iteration }}
                                </td>
                                <td class="text-center tooltip" title="@translate(Contacts Name)">
                                    {{ $perfex->name }}
                                </td>
                                <td class="text-center tooltip" title="@translate(Contacts Email)">{{ $perfex->email }}</td>
                                <td class="text-center tooltip" title="@translate(Contacts Phone)">{{ $perfex->phonenumber }}</td>
                            </tr>
                        @empty
                        <td colspan="6">
                                <div class="text-center">
                                    <img src="{{ notFound('log.png') }}" class="m-auto no-shadow" alt="#campaign-not-found">
                                </div>
                            </td>
                        @endforelse
                    @endif
                </tbody>
            </table>
                {{-- Fetch data::ENDS --}}



        </div>
    </div>
    <!-- END: Wizard Layout -->
@endsection

@section('script')
   <script src="{{ filePath('assets/js/jquery.js') }}"></script>
   <script src="{{ filePath('assets/js/parsley.js') }}"></script>
   <script src="{{ filePath('assets/js/validation.js') }}"></script>
@endsection
