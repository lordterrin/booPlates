@extends('layouts.app')

    @section('content')
    <div id="booBoard" class="booBoard"></div>
    @endsection


@push('scripts')
<script>
    const prettyDate = (iso) => {
        if (!iso) return '';
        const d = new Date(iso);
        return d.toLocaleDateString(undefined, { year: 'numeric', month: 'long', day: 'numeric' });
    };
  
    document.addEventListener('DOMContentLoaded', () => {
        new gridjs.Grid({
            columns: [
                { id: 'name', name: 'Name' },
                { id: 'states_count', name: 'Total States' },
                {
                    id: 'states_max_updated_at',
                    name: 'Most Recent License Plate',
                    formatter: (cell) => prettyDate(cell),
                    sort: {
                        compare: (a, b) => new Date(a).getTime() - new Date(b).getTime(),
                    },
                }
            ],
            sort: true,
            search: true,
            pagination: { limit: 25 },
            server: {
                url: 'api/v1/leaderboard', // whatever endpoint you choose
                then: res => res.data,     // pull data array from your wrapper
            }
            }).render(document.getElementById('booBoard'));
    });
</script>
@endpush
