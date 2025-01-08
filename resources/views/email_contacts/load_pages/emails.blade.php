            <!-- BEGIN: Inbox Filter -->

            <div class="intro-y flex flex-col-reverse sm:flex-row items-center">
                <div class="w-full flex sm:w-auto relative mr-auto mt-3 sm:mt-0">
                    <x-feathericon-search class="mt-2" />
                    <input type="text" onkeyup="search(this)"
                        class=" input w-full sm:w-64 box px-10 text-gray-700 dark:text-gray-300 placeholder-theme-13"
                        placeholder="Search mail">
                </div>
            </div>

            <!-- END: Inbox Filter -->
            {{-- @click="allSelcted = !allSelected" role="button" x-show="open" --}}
            {{-- @click="open = !open" --}}
            <div x-data="{ open: false, isLoading:false }" class="mt-5 ">
                <form hx-post="{{ route('email.contacts.destroy.all.contact') }}" 
                hx-swap="body" 
                hx-target="body"
                 method="post">
                    @method('DELETE')
                    @csrf
                    <div class="flex gap-4 items-center hidden" x-data="{ selectedAll: false }" x-show="open">
                        <label class="mb-3 pl-4 flex gap-2 items-center font-bold text-blue-500">
                            <input x-on:change='selectedAll=!selectedAll' class="input border border-gray-500"
                                name="check_all_emails" type="checkbox" role="button">
                            <span>{{ __('Select All') . ' ' . number_format(emailCount()) . ' ' . __('Email') }}</span>
                            <button @click="isLoading = !isLoading" x-show="selectedAll"
                                    class="bg-red-800 text-white p-2 mx-2 flex items-center rounded-full hover:bg-red-700 focus:outline-none focus:ring focus:border-red-300"
                                    title="@translate(Delete all)">
                                <x-feathericon-trash />                               
                            </button>
                            <x-uni-spinner-alt-o class="w-6 h-6 hidden text-theme-6 hx-indicator animate-spin" ::class="{ 'hidden': !isLoading }" />
                        </label>
                    </div>
                </form>
                <div
                    class="p-5 pt-0 flex flex-col-reverse sm:flex-row text-gray-600 border-b border-gray-200 dark:border-dark-1">

                    <div
                        class="flex items-center sm:mt-0 border-t sm:border-0 border-gray-200 pt-5 sm:pt-0 -mx-5 sm:mx-0 px-5 sm:px-0">

                        <input @click="open = !open" class="input border border-gray-500 checkAll" id="check_all"
                            type="checkbox">

                        <a href="javascript:;" onclick="pageLoad()"
                            class="w-5 h-5 ml-5 flex items-center justify-center dark:text-gray-300"
                            title="@translate(Reload)">
                            <x-feathericon-refresh-cw />
                        </a>
                        <a href="javascript:;"
                            class="w-5 h-5 ml-5 flex items-center justify-center dark:text-gray-300 favourites-all"
                            title="@translate(Add to favourite)">
                            <x-feathericon-star />
                        </a>
                        <a href="javascript:;"
                            class="w-5 h-5 ml-5 flex items-center justify-center dark:text-gray-300 block-all"
                            title="@translate(Blacklist email)">
                            <x-feathericon-x-octagon />
                        </a>
                        <a href="javascript:;"
                            class="w-5 h-5 ml-5 flex items-center justify-center dark:text-gray-300 delete-all"
                            title="@translate(Delete selected email)">
                            <x-feathericon-trash />
                        </a>

                        <a href="javascript:;"
                            class="w-5 h-5 ml-5 flex items-center justify-center dark:text-gray-300 send-email"
                            title="@translate(Send test email)">
                            <x-feathericon-send />
                        </a>

                        <a href="{{ route('email.contacts.export') }}" title="@translate(Export CSV)"
                            class="w-5 h-5 ml-5 flex items-center justify-center dark:text-gray-30">
                            <span class="w-5 h-5 flex items-center justify-center">
                                <x-feathericon-file-text />
                            </span>
                        </a>

                    </div>
                    <div class="flex items-center sm:ml-auto">
                        <div class="dark:text-gray-300 ml-5">@translate(Total) {{ number_format(emailCount()) }}
                            email(s)
                        </div>
                    </div>
                </div>
            </div>


            <div class="min-h-screen py-5">
                <div class='overflow-x-auto w-full'>
                    <table
                        class='mx-auto w-full whitespace-nowrap rounded-lg bg-white divide-y divide-gray-300 overflow-hidden'>
                        <thead class="bg-gray-900">
                            <tr class="text-white text-left">
                                <th class="font-semibold text-sm uppercase px-6 py-4"> Users </th>
                                <th class="font-semibold text-sm uppercase px-6 py-4 text-center"> Created </th>
                                <th class="font-semibold text-sm uppercase px-6 py-4 text-right">Action</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 myTable">
                            @forelse ($emails as $email)
                                <tr>
                                    <td class="px-6 py-4">
                                        <div class="flex items-center space-x-6">
                                            <div class="inline-flex w-10 h-10">
                                                <img class='w-10 h-10 object-cover rounded-full'
                                                    alt='{{ $email->email ?? 'No Email' }}'
                                                    src='{{ emailAvatar($email->email ?? 'No Email') }}' />
                                            </div>
                                            <div>
                                                <p> <label
                                                        for="{{ $email->id }}">{{ $email->name ?? 'No name' }}</label>
                                                </p>
                                                <p class="text-gray-500 text-sm font-semibold tracking-wide"> <label
                                                        for="{{ $email->id }}">{{ Str::limit($email->email, 50) ?? 'No email address' }}</label>
                                                </p>
                                                <p class="text-gray-500 text-sm font-semibold tracking-wide"> <label
                                                        for="{{ $email->id }}">
                                                        {{ $email->phone != null ? '+' : null }}{{ $email->country_code }}{{ $email->phone ?? 'No phone number' }}
                                                    </label>
                                                </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-center"> {{ $email->created_at->diffForHumans() }} </td>
                                    <td class="py-4 text-right">

                                        <div class="flex-none flex justify-end mr-4">
                                            <input id="{{ $email->id }}"
                                                class="input flex-none border border-gray-500 checking"
                                                data-id="{{ $email->id }}" data-email="{{ $email->email }}"
                                                name="check" type="checkbox">
                                            <a href="javascript:;" id="markAsFav" data-id="{{ $email->id }}"
                                                class="w-5 h-5 flex-none ml-4 flex items-center justify-center text-gray-500">
                                                <x-feathericon-star
                                                    class="{{ $email->favourites == 1 ? 'text-blue-300' : null }}" />
                                            </a>

                                            <a href="{{ route('email.contact.show', $email->id) }}"
                                                class="w-5 h-5 flex-none ml-4 flex items-center justify-center text-gray-500 tooltip"
                                                title="@translate(Edit)">
                                                <x-feathericon-edit />
                                            </a>

                                            <div class="w-6 h-6 flex-none image-fit relative ml-5 email">
                                                <img alt="{{ $email->email ?? 'No Email' }}" class="rounded-full"
                                                    src="{{ emailAvatar($email->email ?? 'No Email') }}">
                                            </div>
                                        </div>

                                    </td>
                                </tr>
                            @empty
                                <div class="text-center">
                                    <img src="{{ notFound('mail-not-found.png') }}" class="m-auto"
                                        alt="#email-not-found">
                                </div>
                            @endforelse
                        </tbody>
                    </table>

                    <div class="p-5 flex flex-col sm:flex-row items-center text-center sm:text-left text-gray-600">
                        {{ $emails->links('vendor.pagination.custom') }}
                    </div>

                </div>
            </div>

            @alpineJs
            @htmx

            <script src="{{ filePath('bladejs/email_contacts/load_pages/emails.js') }}"></script>
