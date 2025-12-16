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

    const nameLink = (cell, row) => {
        const id = row.cells[0].data; // because id is the first column, even if it's hidden
        return gridjs.html(`<a href="/?id=${id}">${cell}</a>`);
    };
  
    document.addEventListener('DOMContentLoaded', () => {
        new gridjs.Grid({
            columns: [
                { id: 'id', hidden: true},
                {   id: 'name', 
                    name: 'Name',
                    formatter: (cell, row) => {
                        return nameLink(cell, row);
                    }
                },
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
                url: 'api/v1/leaderboard', 
                then: res => res.data,     
            }
            }).render(document.getElementById('booBoard'));
    });
</script>
@endpush
