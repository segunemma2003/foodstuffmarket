
<button type="submit" class="button w-50 ml-5 mr-2 mb-2 flex items-center justify-center bg-theme-1 text-white group-email-edit">
        <i data-feather="activity" class="w-4 h-4 mr-2"></i> @translate(Update Group) 
</button>
            
<div id="emailsSection"></div>
<!-- BEGIN: Inbox Content -->
<div class="intro-y inbox box mt-5">

    <div class="loader_card animate-pulse col-span-12 lg:col-span-9 xxl:col-span-10 mt-5">
        @for ($i = 1; $i < 21; $i++)
        <div class="flex">
            <div class="rounded-full mt-2 h-8 w-10 bg-gray-400"></div>
            <div class="w-full mr-4 ml-4 h-8 mt-2 rounded-full bg-gray-400"></div>
            <div class="w-20 h-8 mt-2 rounded-full bg-gray-400"></div>
        </div>
        @endfor
    </div>

    <div class="col-span-12 lg:col-span-9 xxl:col-span-10" id="campaignLoadPage"></div>

    <button type="submit" class="button w-50 ml-5 mr-2 mb-2 flex items-center justify-center bg-theme-1 text-white group-email-edit">
            <i data-feather="activity" class="w-4 h-4 mr-2"></i> @translate(Update Group) 
    </button>

</div>
<!-- END: Inbox Content -->


