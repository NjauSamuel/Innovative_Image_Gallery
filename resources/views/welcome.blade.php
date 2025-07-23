@extends('layouts.app')

@section('title', 'Home')

@section('content')

  <!-- Breadcrumb -->
  <nav class="tw:flex flex tw:px-5 tw:py-3 tw:text-gray-700 tw:border tw:border-gray-200 tw:rounded-lg tw:bg-gray-50 dark:tw:bg-gray-800 dark:tw:border-gray-700" aria-label="Breadcrumb">
    <ol class="tw:inline-flex tw:items-center tw:space-x-1 md:tw:space-x-2 rtl:tw:space-x-reverse">
      <li class="tw:inline-flex tw:items-center">
        <a href="#" class="tw:inline-flex tw:items-center tw:text-sm tw:font-medium tw:text-gray-700 hover:tw:text-blue-600 dark:tw:text-gray-400 dark:hover:tw:text-white">
          <svg class="tw:w-3 tw:h-3 tw:me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"/>
          </svg>
          Home
        </a>
      </li>
      <li>
        <div class="tw:flex flex tw:items-center">
          <svg class="rtl:tw:rotate-180 tw:block block tw:w-3 tw:h-3 tw:mx-1 tw:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
          </svg>
          <a href="#" class="tw:ms-1 tw:text-sm tw:font-medium tw:text-gray-700 hover:tw:text-blue-600 md:tw:ms-2 dark:tw:text-gray-400 dark:hover:tw:text-white">Templates</a>
        </div>
      </li>
      <li aria-current="page">
        <div class="tw:flex flex tw:items-center">
          <svg class="rtl:tw:rotate-180 tw:w-3 tw:h-3 tw:mx-1 tw:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
          </svg>
          <span class="tw:ms-1 tw:text-sm tw:font-medium tw:text-gray-500 md:tw:ms-2 dark:tw:text-gray-400">Flowbite</span>
        </div>
      </li>
    </ol>
  </nav>

  <div class="tw:p-4">
    <h1>Welcome Home 🎉</h1>

    <div class="tw:w-full tw:max-w-[16rem]">
      <div class="tw:relative">
        <label for="npm-install-copy-text" class="tw:sr-only">Label</label>
        <input id="npm-install-copy-text" type="text" class="tw:col-span-6 tw:bg-gray-50 tw:border tw:border-gray-300 tw:text-gray-500 tw:text-sm tw:rounded-lg tw:focus:ring-blue-500 tw:focus:border-blue-500 tw:block block tw:w-full tw:px-2.5 tw:py-4 dark:tw:bg-gray-700 dark:tw:border-gray-600 dark:tw:placeholder-gray-400 dark:tw:text-gray-400 dark:tw:focus:ring-blue-500 dark:tw:focus:border-blue-500" value="npm install flowbite" disabled readonly>
        <button data-copy-to-clipboard-target="npm-install-copy-text" class="tw:absolute tw:end-2.5 tw:top-1/2 tw:-translate-y-1/2 tw:text-gray-900 dark:tw:text-gray-400 tw:hover:bg-gray-100 dark:tw:bg-gray-800 dark:tw:border-gray-600 dark:tw:hover:bg-gray-700 tw:rounded-lg tw:py-2 tw:px-2.5 tw:inline-flex tw:items-center tw:justify-center tw:bg-white tw:border-gray-200 tw:border tw:h-8">
          <span id="default-message">
            <span class="tw:inline-flex tw:items-center">
              <svg class="tw:w-3 tw:h-3 tw:me-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                <path d="M16 1h-3.278A1.992 1.992 0 0 0 11 0H7a1.993 1.993 0 0 0-1.722 1H2a2 2 0 0 0-2 2v15a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2Zm-3 14H5a1 1 0 0 1 0-2h8a1 1 0 0 1 0 2Zm0-4H5a1 1 0 0 1 0-2h8a1 1 0 1 1 0 2Zm0-5H5a1 1 0 0 1 0-2h2V2h4v2h2a1 1 0 1 1 0 2Z"/>
              </svg>
              <span class="tw:text-xs tw:font-semibold">Copy</span>
            </span>
          </span>
          <span id="success-message" class="hidden tw:hidden">
            <span class="tw:inline-flex tw:items-center">
              <svg class="tw:w-3 tw:h-3 tw:text-blue-700 dark:tw:text-blue-500 tw:me-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5"/>
              </svg>
              <span class="tw:text-xs tw:font-semibold tw:text-blue-700 dark:tw:text-blue-500">Copied</span>
            </span>
          </span>
        </button>
      </div>
    </div>

    <p class="tw:text-xl tw:font-bold">Everything loaded successfully!</p>
  </div>

  <footer class="tw:bg-white tw:rounded-lg tw:shadow-sm tw:m-4 dark:tw:bg-gray-800">
    <div class="tw:w-full tw:mx-auto tw:max-w-screen-xl tw:p-4 md:tw:flex flex md:tw:items-center md:tw:justify-between">
      <span class="tw:text-sm tw:text-gray-500 sm:tw:text-center dark:tw:text-gray-400">
        © 2023 <a href="https://flowbite.com/" class="tw:hover:underline">Flowbite™</a>. All Rights Reserved.
      </span>
      <ul class="tw:flex flex tw:flex flex-wrap tw:items-center tw:mt-3 tw:text-sm tw:font-medium tw:text-gray-500 dark:tw:text-gray-400 sm:tw:mt-0">
        <li>
          <a href="#" class="tw:hover:underline tw:me-4 md:tw:me-6">About</a>
        </li>
        <li>
          <a href="#" class="tw:hover:underline tw:me-4 md:tw:me-6">Privacy Policy</a>
        </li>
        <li>
          <a href="#" class="tw:hover:underline tw:me-4 md:tw:me-6">Licensing</a>
        </li>
        <li>
          <a href="#" class="tw:hover:underline">Contact</a>
        </li>
      </ul>
    </div>
  </footer>

<script>
  
  window.addEventListener('load', function () {
      const clipboard = FlowbiteInstances.getInstance('CopyClipboard', 'npm-install-copy-text');

      const $defaultMessage = document.getElementById('default-message');
      const $successMessage = document.getElementById('success-message');

      clipboard.updateOnCopyCallback((clipboard) => {
          showSuccess();

          // reset to default state
          setTimeout(() => {
              resetToDefault();
          }, 2000);
      })

      const showSuccess = () => {
          $defaultMessage.classList.add('tw:hidden');
          $successMessage.classList.remove('tw:hidden');
      }

      const resetToDefault = () => {
          $defaultMessage.classList.remove('tw:hidden');
          $successMessage.classList.add('tw:hidden');
      }
  })

</script> 


@endsection
