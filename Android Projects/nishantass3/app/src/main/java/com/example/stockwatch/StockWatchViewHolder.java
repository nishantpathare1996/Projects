package com.example.stockwatch;

import android.view.View;
import android.widget.ImageView;
import android.widget.TextView;
import androidx.annotation.NonNull;
import androidx.recyclerview.widget.RecyclerView;

public class StockWatchViewHolder extends RecyclerView.ViewHolder
{
    public TextView stockName;
    public TextView stockSymbol;
    public TextView stockPrice;
    public TextView priceChange;
    public TextView percentChange;
    public ImageView arrow;

    public StockWatchViewHolder(@NonNull View itemView)
    {
        super(itemView);
        stockName = itemView.findViewById(R.id.name_stock);
        stockSymbol = itemView.findViewById(R.id.symbols_stock);
        stockPrice = itemView.findViewById(R.id.price_stock);
        priceChange = itemView.findViewById(R.id.changeInPrice);
        percentChange = itemView.findViewById(R.id.changeInPercent);
        arrow = itemView.findViewById(R.id.arrow);
    }
}
