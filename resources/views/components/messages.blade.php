@if(session()->has('message'))
<div style="background-color: #e6f4f1; position: fixed; right: 10px; bottom: 10px; z-index: 20; border-top: 4px solid #2c786c; border-radius: 0 0 5px 5px; padding: 10px; box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.2);">
    <div style="display: flex;">
        <div style="padding-top: 2px;">
            <svg style="fill: #2c786c; height: 20px; width: 20px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/>
            </svg>
        </div>
        <div style="margin-left: 10px;">
            <p style="font-weight: bold; margin: 0;">Alert Message</p>
            <p style="font-size: 14px; margin: 0;">{{ session('message') }}</p>
        </div>
    </div>
</div>
@endif
