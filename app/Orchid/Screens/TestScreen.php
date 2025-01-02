<?php

namespace App\Orchid\Screens;

use App\Orchid\Layouts\TableListener;
use App\View\Components\AppLayout;
use App\View\Components\TableLayout;
use Illuminate\Http\Request;
use Kovyakin\Components\app\View\Components\TableComponent;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\Group;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Radio;
use Orchid\Screen\Layouts\Listener;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Alert;
use Orchid\Support\Facades\Layout;

class TestScreen extends Screen
{
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(): iterable
    {
        return [];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'TestScreen';
    }

    public function description(): ?string
    {
        return 'Test Screen Description';
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Button::make('Send Message')
                ->icon('paper-plane')
                ->method('sendMessage')
        ];
    }

    /**
     * The screen's layout elements.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): iterable
    {
        return [
            Layout::view('table'),
//            Layout::component(TableLayout::class),
//            TableListener::class,
            Layout::rows([
                Input::make('example')
                    ->type('text')
                    ->title('Example'),
                Button::make('Send Message')->method('sendMessage')
            ]),

        ];
    }

    public function sendMessage(Request $request)
    {
//      return redirect()->back();
        Alert::info('Your email message has been sent successfully.');
    }
}
