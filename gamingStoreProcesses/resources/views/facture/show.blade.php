    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Facture</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('factures.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $facture->name }}
                        </div>
                        <div class="form-group">
                            <strong>Product Id:</strong>
                            {{ $facture->product_id }}
                        </div>
                        <div class="form-group">
                            <strong>Amountproduct:</strong>
                            {{ $facture->amountProduct }}
                        </div>
                        <div class="form-group">
                            <strong>Priceproduct:</strong>
                            {{ $facture->priceProduct }}
                        </div>
                        <div class="form-group">
                            <strong>Totalpriceproduct:</strong>
                            {{ $facture->totalPriceProduct }}
                        </div>
                        <div class="form-group">
                            <strong>Totalcost:</strong>
                            {{ $facture->totalCost }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

